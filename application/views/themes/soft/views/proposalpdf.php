<?php
$dimensions = $pdf->getPageDimensions();

$pdf_logo_url = pdf_logo_url();
$pdf->writeHTMLCell(($dimensions['wk'] - ($dimensions['rm'] + $dimensions['lm'])), '', '', '', $pdf_logo_url, 0, 1, false, true, 'L', true);

$pdf->ln(4);
// Get Y position for the separation
$y            = $pdf->getY();

$proposal_info = '<div style="color:#424242;">';
    $proposal_info .= format_organization_info();
$proposal_info .= '</div>';

$pdf->writeHTMLCell(($swap == '0' ? (($dimensions['wk'] / 2) - $dimensions['rm']) : ''), '', '', ($swap == '0' ? $y : ''), $proposal_info, 0, 0, false, true, ($swap == '1' ? 'R' : 'J'), true);

$rowcount = max(array($pdf->getNumLines($proposal_info, 80)));

// Proposal to
$client_details .= '<div style="color:#424242;">';
    $client_details .= format_proposal_info($proposal,'pdf');
$client_details .= '</div>';

$pdf->writeHTMLCell(($dimensions['wk'] / 2) - $dimensions['lm'], $rowcount*7, '', ($swap == '1' ? $y : ''), $client_details, 0, 1, false, true, ($swap == '1' ? 'J' : 'R'), true);

$pdf->ln(6);

$proposal_date = _l('proposal_date') . ': ' . _d($proposal->date);
$open_till = '';

if(!empty($proposal->open_till)){
    $open_till = _l('proposal_open_till'). ': ' . _d($proposal->open_till);
}

$item_width = 38;
// If show item taxes is disabled in PDF we should increase the item width table heading
$item_width = get_option('show_tax_per_item') == 0 ? $item_width+15 : $item_width;

// The same language keys from estimates are used here
$qty_heading = _l('estimate_table_quantity_heading');
if($proposal->show_quantity_as == 2){
    $qty_heading = _l('estimate_table_hours_heading');
} else if($proposal->show_quantity_as == 3){
    $qty_heading = _l('estimate_table_quantity_heading') .'/'._l('estimate_table_hours_heading');
}

// Header
$items_html = '<table width="98%" bgcolor="#fff" cellspacing="0" cellpadding="8" border="0">
<tr height="30" bgcolor="'.get_option('pdf_table_heading_color').'" style="color:'.get_option('pdf_table_heading_text_color').';">
    <th width="5%;" align="center">#</th>
    <th width="45%;" align="left">'._l('estimate_table_item_heading').'</th>
    <th width="52%" align="right">'.$qty_heading.'</th>
    <th bgcolor="#fff" width="15%" align="right">'._l('estimate_table_rate_heading').'</th>';
    if(get_option('show_tax_per_item') == 1){
        $items_html .= '<th width="15%" align="right">'._l('estimate_table_tax_heading').'</th>';
    }
    $items_html .='<th bgcolor="#fff" width="15%" align="right">'._l('estimate_table_amount_heading').'</th>
</tr>';

// Items
$items_html .= '<tbody>';

$items_data = get_table_items_and_taxes($proposal->items,'proposal');

$taxes = $items_data['taxes'];
$items_html .= $items_data['html'];

$items_html .= '</tbody>';
$items_html .= '</table>';
$items_html .= '<br /><br />';
$items_html .= '';
$items_html .= '<table cellpadding="6" style="font-size:'.($font_size+4).'px">';
$items_html .= '
<tr>

</tr>';
if($proposal->discount_percent != 0){
    $items_html .= '
    <tr>

    </tr>';
}
foreach($taxes as $tax){
    $total = array_sum($tax['total']);
    if($proposal->discount_percent != 0 && $proposal->discount_type == 'before_tax'){
        $total_tax_calculated = ($total * $proposal->discount_percent) / 100;
        $total = ($total - $total_tax_calculated);
    }
    // The tax is in format TAXNAME|20
    $_tax_name = explode('|',$tax['tax_name']);
    $items_html .= '<tr>

</tr>';
}

if ((int)$proposal->adjustment != 0) {
    $items_html .= '<tr>

</tr>';
}
$items_html .= '
<tr style="background-color:#f0f0f0;">

</tr>';
$items_html .= '</table>';

if(get_option('total_to_words_enabled') == 1){
    $items_html .= '<br /><br /><br />';
    $items_html .= '<strong style="text-align:center;">'._l('num_word').': '.$CI->numberword->convert($proposal->total,$proposal->currency_name).'</strong>';
}

$proposal->content = str_replace('{proposal_items}', $items_html, $proposal->content);
// Get the proposals css
$css = file_get_contents(FCPATH.'assets/css/proposals.css');
// Theese lines should aways at the end of the document left side. Dont indent these lines
$html = <<<EOF
<style>
    $css
</style>
<p style="font-size:20px;"># $number | <span style="font-size:15px;">$proposal->subject</span>
| <span style="font-size:15px;">$proposal_date</span> </p>

$open_till
<br />
<div style="width:675px !important;">
$proposal->content
</div>
EOF;

$pdf->writeHTML($html, true, false, true, false, '');

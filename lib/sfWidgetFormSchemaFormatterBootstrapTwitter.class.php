<?php 

class sfWidgetFormSchemaFormatterBootstrapTwitter extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat       = "<div class='control-group%row_class%'>
                        	%label%%error%
                        	<div class='controls'>
                        		%field%
                        		%help% 
                        		%hidden_fields%
                        	</div>
                        </div>",
    $errorRowFormat  = "<div>%errors%</div>",
    $helpFormat      = '<p class="help-block">%help%</p>',
    $decoratorFormat = "<div>\n  %content%</div>";
 
  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
  {
    $row = parent::formatRow(
      $label,
      $field,
      $errors,
      $help,
      $hiddenFields
    );
 
    return strtr($row, array(
      '%row_class%' => (count($errors) > 0) ? ' form_row_error' : '',
    ));
  }
}
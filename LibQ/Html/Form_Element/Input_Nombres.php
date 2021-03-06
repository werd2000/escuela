<?php

/**
 * Crea un Input para usar como campo apellidos
 *
 * @author werd
 */
class LibQ_Html_Form_Element_Input_Nombres {

    protected $_value;

    public function __construct($valor='') {
        $this->_value = $valor;
    }

    public function render() {
        echo '<div class="form-group">';
        echo '<label for="nombres" class="required col-sm-2 control-label">Nombres:</label>';
        echo '<div class="col-sm-10">';
        echo '<input type="text" name="nombres" id="nombres" value="'. $this->_value.'" class="form-control"'
                . 'maxlength="25" size="25" required data-bv-notempty-message="El Nombre es obligatorio">';
        echo '</div>';
        echo '</div>';
    }
    
}

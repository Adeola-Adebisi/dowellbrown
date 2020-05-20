/*
 * poiyee.ho
 */
(function($){

    var keyboardLayout = {
        'layout': [
            // alphanumeric keyboard type
            // text displayed on keyboard button, keyboard value, keycode, column span, new row
            [
                [
                     ['α,β', '998', 998, 0, true], ['¹', '¹', 49, 0, false], ['²', '²', 50, 0, false], ['³', '³', 51, 0, false], ['⁴', '⁴', 52, 0, false], ['⁵', '⁵', 53, 0, false], ['⁶', '⁶', 54, 0, false], 
                    ['⁷', '⁷', 55, 0, false], ['⁸', '⁸', 56, 0, false], ['⁹', '⁹', 57, 0, false], ['⁰', '⁰', 48, 0, false], ['⁻', '⁻', 189, 0, false], ['⁼', '⁼', 187, 0, false],
                    ['q', 'q', 81, 0, true], ['ʷ', 'ʷ', 87, 0, false], ['ᵉ', 'ᵉ', 69, 0, false], ['ʳ', 'ʳ', 82, 0, false], ['ᵗ', 'ᵗ', 84, 0, false], ['ʸ', 'ʸ', 89, 0, false], ['ᵘ', 'ᵘ', 85, 0, false], 
                    ['ⁱ', 'ⁱ', 73, 0, false], ['ᵒ', 'ᵒ', 79, 0, false], ['ᵖ', 'ᵖ', 80, 0, false], ['⁽', '⁽', 219, 0, false], ['⁾', '⁾', 221, 0, false], ['⁺', '⁺', 220, 0, false],
                    ['ᵃ', 'ᵃ', 65, 0, true], ['ˢ', 'ˢ', 83, 0, false], ['ᵈ', 'ᵈ', 68, 0, false], ['ᶠ', 'ᶠ', 70, 0, false], ['ᵍ', 'ᵍ', 71, 0, false], ['ʰ', 'ʰ', 72, 0, false], ['ʲ', 'ʲ', 74, 0, false], 
                    ['ᵏ', 'ᵏ', 75, 0, false], ['ˡ', 'ˡ', 76, 0, false], [';', ';', 186, 0, false], ['&#39;', '\'', 222, 0, false], ['Enter', '13', 13, 3, false],
                    ['Subscript', '999', 999, 2, true], ['ᶻ', 'ᶻ', 90, 0, false], ['ˣ', 'ˣ', 88, 0, false], ['ᶜ', 'ᶜ', 67, 0, false], ['ᵛ', 'ᵛ', 86, 0, false], ['ᵇ', 'ᵇ', 66, 0, false], ['ⁿ', 'ⁿ', 78, 0, false], 
                    ['ᵐ', 'ᵐ', 77, 0, false], [',', ',', 188, 0, false], ['.', '.', 190, 0, false], ['/', '/', 191, 0, false], ['Shift', '16', 16, 2, false],
                    ['Bksp', '8', 8, 3, true], ['Space', '32', 32, 12, false], ['Clear', '46', 46, 3, false], ['Cancel', '27', 27, 3, false]
                ],
                [
                    ['α,β', '998', 998, 0, true], ['!', '!', 49, 0, false], ['@', '@', 50, 0, false], ['#', '#', 51, 0, false], ['$', '$', 52, 0, false], ['%', '%', 53, 0, false], ['^', '^', 54, 0, false], 
                    ['&', '&', 55, 0, false], ['*', '*', 56, 0, false], ['(', '(', 57, 0, false], [')', ')', 48, 0, false], ['_', '_', 189, 0, false], ['+', '+', 187, 0, false],
                    ['ᵠ', 'ᵠ', 81, 0, true], ['ᵂ', 'ᵂ', 87, 0, false], ['ᴱ', 'ᴱ', 69, 0, false], ['ᴿ', 'ᴿ', 82, 0, false], ['ᵀ', 'ᵀ', 84, 0, false], ['ʸ', 'ʸ', 89, 0, false], ['ᵁ', 'ᵁ', 85, 0, false], 
                    ['ᴵ', 'ᴵ', 73, 0, false], ['ᴼ', 'ᴼ', 79, 0, false], ['ᴾ', 'ᴾ', 80, 0, false], ['{', '{', 219, 0, false], ['}', '}', 221, 0, false], ['|', '|', 220, 0, false],
                    ['ᴬ', 'ᴬ', 65, 0, true], ['ˢ', 'ˢ', 83, 0, false], ['ᴰ', 'ᴰ', 68, 0, false], ['ᶠ', 'ᶠ', 70, 0, false], ['ᴳ', 'ᴳ', 71, 0, false], ['ᴴ', 'ᴴ', 72, 0, false], ['ᴶ', 'ᴶ', 74, 0, false], 
                    ['ᴷ', 'ᴷ', 75, 0, false], ['ᴸ', 'ᴸ', 76, 0, false], [':', ':', 186, 0, false], ['"', '"', 222, 0, false], ['Enter', '13', 13, 3, false],
                    ['Superscript', '999', 999, 2, true], ['ᶻ', 'ᶻ', 90, 0, false], ['ˣ', 'ˣ', 88, 0, false], ['ᶜ', 'ᶜ', 67, 0, false], ['ⱽ', 'ⱽ', 86, 0, false], ['ᴮ', 'ᴮ', 66, 0, false], ['ᴺ', 'ᴺ', 78, 0, false], 
                    ['ᴹ', 'ᴹ', 77, 0, false], ['<', '<', 188, 0, false], ['>', '>', 190, 0, false], ['?', '?', 191, 0, false], ['Shift', '16', 16, 2, false],
                    ['Bksp', '8', 8, 3, true], ['Space', '32', 32, 12, false], ['Clear', '46', 46, 3, false], ['Cancel', '27', 27, 3, false]  
                ]
                ,
                [
                    ['α,β', '998', 998, 0, true], ['₁', '₁', 49, 0, false], ['₂', '₂', 50, 0, false], ['₃', '₃', 51, 0, false], ['₄', '₄', 52, 0, false], ['₅', '₅', 53, 0, false], ['₆', '₆', 54, 0, false], 
                    ['₇', '₇', 55, 0, false], ['₈', '₈', 56, 0, false], ['₉', '₉', 57, 0, false], ['₀', '₀', 48, 0, false], ['₋', '₋', 189, 0, false], ['₌', '₌', 187, 0, false],
                    ['ᵩ', 'ᵩ', 81, 0, true], ['W', 'W', 87, 0, false], ['ₑ', 'ₑ', 69, 0, false], ['ᵣ', 'ᵣ', 82, 0, false], ['ₜ', 'ₜ', 84, 0, false], ['ᵧ', 'ᵧ', 89, 0, false], ['ᵤ', 'ᵤ', 85, 0, false], 
                    ['ᵢ', 'ᵢ', 73, 0, false], ['ₒ', 'ₒ', 79, 0, false], ['ₚ', 'ₚ', 80, 0, false], ['₍', '₍', 219, 0, false], ['₎', '₎', 221, 0, false], ['₊', '₊', 220, 0, false],
                    ['ₐ', 'ₐ', 65, 0, true], ['ₛ', 'ₛ', 83, 0, false], ['D', 'D', 68, 0, false], ['F', 'F', 70, 0, false], ['G', 'G', 71, 0, false], ['ₕ', 'ₕ', 72, 0, false], ['ⱼ', 'ⱼ', 74, 0, false], 
                    ['ₖ', 'ₖ', 75, 0, false], ['ₗ', 'ₗ', 76, 0, false], [':', ':', 186, 0, false], ['"', '"', 222, 0, false], ['Enter', '13', 13, 3, false],
                    ['Superscript', '999', 999, 2, true], ['Z', 'Z', 90, 0, false], ['ₓ', 'ₓ', 88, 0, false], ['C', 'C', 67, 0, false], ['ᵥ', 'ᵥ', 86, 0, false], ['ᵦ', 'ᵦ', 66, 0, false], ['ₙ', 'ₙ', 78, 0, false], 
                    ['ₘ', 'ₘ', 77, 0, false], ['<', '<', 188, 0, false], ['>', '>', 190, 0, false], ['?', '?', 191, 0, false], ['Shift', '16', 16, 2, false],
                    ['Bksp', '8', 8, 3, true], ['Space', '32', 32, 12, false], ['Clear', '46', 46, 3, false], ['Cancel', '27', 27, 3, false]  
                ]
                ,
                [
                    ['α,β', '998', 998, 0, true], ['±', '±', 49, 0, false], ['÷', '÷', 50, 0, false], ['⇔', '⇔', 51, 0, false], ['′', '′', 52, 0, false], ['→', '→', 53, 0, false], ['₆', '₆', 54, 0, false], 
                    ['∓', '∓', 55, 0, false], ['∵', '∵', 56, 0, false], ['∴', '∴', 57, 0, false], ['∮', '∮', 48, 0, false], ['√', '√', 189, 0, false], ['∫', '∫', 187, 0, false],
                    ['ᵩ', 'ᵩ', 81, 0, true], ['ω', 'ω', 87, 0, false], ['ε', 'ε', 69, 0, false], ['Δ', 'Δ', 82, 0, false], ['τ', 'τ', 84, 0, false], ['Ω', 'Ω', 89, 0, false], ['μ', 'μ', 85, 0, false], 
                    ['σ', 'σ', 73, 0, false], ['ₒ', 'ₒ', 79, 0, false], ['ρ', 'ρ', 80, 0, false], ['₍', '₍', 219, 0, false], ['Λ', 'Λ', 221, 0, false], ['₊', '₊', 220, 0, false],
                    ['α', 'α', 65, 0, true], ['ₛ', 'ₛ', 83, 0, false], ['δ', 'δ', 68, 0, false], ['F', 'F', 70, 0, false], ['Θ', 'Θ', 71, 0, false], ['η', 'η', 72, 0, false], ['Σ', 'Σ', 74, 0, false], 
                    ['υ', 'υ', 75, 0, false], [' λ', ' λ', 76, 0, false], [':', ':', 186, 0, false], ['"', '"', 222, 0, false], ['Enter', '13', 13, 3, false],
                    ['Superscript', '999', 999, 2, true], ['ζ', 'ζ', 90, 0, false], ['ψ', 'ψ', 88, 0, false], ['Γ', 'Γ', 67, 0, false], ['ν', 'ν', 86, 0, false], ['β', 'β', 66, 0, false], ['∂', '∂', 78, 0, false], 
                    ['φ', 'φ', 77, 0, false], ['<', '<', 188, 0, false], ['>', '>', 190, 0, false], ['?', '?', 191, 0, false], ['Shift', '16', 16, 2, false],
                    ['Bksp', '8', 8, 3, true], ['Space', '32', 32, 12, false], ['Clear', '46', 46, 3, false], ['Cancel', '27', 27, 3, false]  
                ]
            ]
        ]
    };

    var activeInput = {
        'htmlElem': '',
        'initValue': '',
        'keyboardLayout': keyboardLayout,
        'keyboardType': '0',
        'keyboardSet': 0,
        'dataType': 'string',
        'isMoney': false,
        'thousandsSep': ',',
        'disableKeyboardKey': false
    };

    /*
     * initialize keyboard
     * @param {type} settings
     */
    $.fn.initKeypad = function(settings){
        //$.extend(activeInput, settings);

        $(this).focus(function(e){
            activateKeypad(e.target);
        });
    };
    
    /*
     * create keyboard container and keyboard button
     * @param {DOM object} targetInput
     */
    function activateKeypad(targetInput){
        if($('div.jQKeyboardContainer').length === 0)
        {
            activeInput.htmlElem = $(targetInput);
            activeInput.initValue = $(targetInput).val();

            $(activeInput.htmlElem).addClass('focus');
            createKeypadContainer();
            createKeypad(0);
        }
    }
    
    /*
     * create keyboard container
     */
    function createKeypadContainer(){
        var container = document.createElement('div');
        container.setAttribute('class', 'jQKeyboardContainer');
        container.setAttribute('id', 'jQKeyboardContainer');
        container.setAttribute('name', 'keyboardContainer' + activeInput.keyboardType);
        
        $('key').append(container);
    }
    
    /*
     * create keyboard
     * @param {Number} set
     */
    function createKeypad(set){
        $('#jQKeyboardContainer').empty();
        
        var layout = activeInput.keyboardLayout.layout[activeInput.keyboardType][set];

        for(var i = 0; i < layout.length; i++){

            if(layout[i][4]){
                var row = document.createElement('div');
                row.setAttribute('class', 'jQKeyboardRow');
                row.setAttribute('name', 'jQKeyboardRow');
                $('#jQKeyboardContainer').append(row);
            }

            var button = document.createElement('button');
            button.setAttribute('type', 'button');
            button.setAttribute('name', 'key' + layout[i][2]);
            button.setAttribute('id', 'key' + layout[i][2]);
            button.setAttribute('class', 'jQKeyboardBtn' + ' ui-button-colspan-' + layout[i][3]);
            button.setAttribute('data-text', layout[i][0]);
            button.setAttribute('data-value', layout[i][1]);
            button.innerHTML = layout[i][0];
            
            $(button).click(function(e){
               getKeyPressedValue(e.target); 
            });

            $(row).append(button);
        }
    }
    /*
     * remove keyboard from kepad container
     */
    function removeKeypad(){
        $('#jQKeyboardContainer').remove();
        $(activeInput.htmlElem).removeClass('focus');
    }
    
    /*
     * handle key pressed
     * @param {DOM object} clickedBtn
     */
    function getKeyPressedValue(clickedBtn){
        var caretPos = getCaretPosition(activeInput.htmlElem);
        var keyCode = parseInt($(clickedBtn).attr('name').replace('key', ''));
        
        var currentValue = $(activeInput.htmlElem).val();
        var newVal = currentValue;
        var closeKeypad = false;
        
        /*
         * TODO
        if(activeInput.isMoney && activeInput.thousandsSep !== ''){
            stripMoney(currentValue, activeInput.thousandsSep);
        }
        */
        
        switch(keyCode){
            case 8:     // backspace key
                newVal = onDeleteKeyPressed(currentValue, caretPos);
		          caretPos--;
                break;
            case 13:    // enter key
                closeKeypad = onEnterKeyPressed();
                break;
            case 16:    // shift key
                onShiftKeyPressed();
                break;
            case 999:    // shift key
                onLowerCaseKeyPressed();
                break;
            case 998:    // shift key
                onSpecialKeyPressed();
                break;
            case 27:    // cancel key
                closeKeypad = true;
                newVal = onCancelKeyPressed(activeInput.initValue);
                break;
            case 32:    // space key
                newVal = onSpaceKeyPressed(currentValue, caretPos);
                caretPos++;
		break;
            case 46:    // clear key
                newVal = onClearKeyPressed();
                break;
            case 190:   // dot key
                newVal = onDotKeyPressed(currentValue, $(clickedBtn), caretPos);
                caretPos++;
                break;
            default:    // alpha or numeric key
                newVal = onAlphaNumericKeyPressed(currentValue, $(clickedBtn), caretPos);
                caretPos++;
                break;
        }
        
        // update new value and set caret position
        $(activeInput.htmlElem).val(newVal);
        
        setCaretPosition(activeInput.htmlElem, caretPos);

        if(closeKeypad){
            $(activeInput.htmlElem).focus();
            removeKeypad();
            
           
        }
    }
    
    /*
     * handle delete key pressed
     * @param value 
     * @param inputType
     */
    function onDeleteKeyPressed(value, caretPos){
        var result = value.split('');
        
        if(result.length > 1){
            result.splice((caretPos - 1), 1);
            return result.join('');
        }
    }
    
    /*
     * handle shift key pressed
     * update keyboard layout and shift key color according to current keyboard set
     */
    function onShiftKeyPressed(){
        var keyboardSet = activeInput.keyboardSet === 0 ? 1 : 0;
        activeInput.keyboardSet = keyboardSet;

        createKeypad(keyboardSet);
        
        if(keyboardSet === 1){
            $('button[name="key16"').addClass('shift-active');
        }else{
            $('button[name="key16"').removeClass('shift-active');
        }
    }
    
    /*
     * test mode for subscript
     * update keyboard layout and shift key color according to current keyboard set
     */
    
    
    function onLowerCaseKeyPressed(){
        var keyboardSet = activeInput.keyboardSet === 0 ? 2 : 0;
        activeInput.keyboardSet = keyboardSet;

        createKeypad(keyboardSet);
        
        if(keyboardSet === 2){
            $('button[name="key999"').addClass('lowercase-active');
        }else{
            $('button[name="key999"').removeClass('lowercase-active');
        }
    }
    
    function onSpecialKeyPressed(){
        var keyboardSet = activeInput.keyboardSet === 3 ? 0 : 3;
        activeInput.keyboardSet = keyboardSet;

        createKeypad(keyboardSet);
        
        if(keyboardSet === 3){
            $('button[name="key998"').addClass('lowercase-active');
        }else{
            $('button[name="key998"').removeClass('lowercase-active');
        }
    }
    
    /*
     * handle space key pressed
     * add a space to current value
     * @param {String} curVal
     * @returns {String}
     */
    function onSpaceKeyPressed(currentValue, caretPos){
        return insertValueToString(currentValue, ' ', caretPos);
    }
    
    /*
     * handle cancel key pressed
     * revert to original value and close key pad
     * @param {String} initValue
     * @returns {String}
     */
   function onCancelKeyPressed(initValue){
       
        return currentValue = $(activeInput.htmlElem).val();
        return currentValue;
     

    }
    
    /*
     * handle enter key pressed value
     * TODO: need to check min max value
     * @returns {Boolean}
     */
    function onEnterKeyPressed(){
        return true;
    }
    
    /*
     * handle clear key pressed
     * clear text field value
     * @returns {String}
     */
    function onClearKeyPressed(){
        return '';
    }
    
    /*
     * handle dot key pressed
     * @param {String} currentVal
     * @param {DOM object} keyObj
     * @returns {String}
     */
    function onDotKeyPressed(currentValue, keyElement, caretPos){
        return insertValueToString(currentValue, keyElement.attr('data-value'), caretPos);
    }
    
    /*
     * handle all alpha numeric keys pressed
     * @param {String} currentVal
     * @param {DOM object} keyObj
     * @returns {String}
     */
    function onAlphaNumericKeyPressed(currentValue, keyElement, caretPos){
        return insertValueToString(currentValue, keyElement.attr('data-value'), caretPos);
    }
    
    /*
     * insert new value to a string at specified position
     * @param {String} currentValue
     * @param {String} newValue
     * @param {Number} pos
     * @returns {String}
     */
    function insertValueToString(currentValue, newValue, pos){
        var result = currentValue.split('');
        result.splice(pos, 0, newValue);
        
        return result.join('');
    }
    
   /*
    * get caret position
    * @param {DOM object} elem
    * @return {Number}
    */
    function getCaretPosition(elem){
        var input = $(elem).get(0);

        if('selectionStart' in input){    // Standard-compliant browsers
            return input.selectionStart;
        } else if(document.selection){    // IE
            input.focus();
            
            var sel = document.selection.createRange();
            var selLen = document.selection.createRange().text.length;
            
            sel.moveStart('character', -input.value.length);
            return sel.text.length - selLen;
        }
    }
    
    /*
     * set caret position
     * @param {DOM object} elem
     * @param {Number} pos
     */
    function setCaretPosition(elem, pos){
        var input = $(elem).get(0);
        
        if(input !== null) {
            if(input.createTextRange){
                var range = elem.createTextRange();
                range.move('character', pos);
                range.select();
            }else{
                input.focus();
                input.setSelectionRange(pos, pos);
            }
        }
    }
})(jQuery);

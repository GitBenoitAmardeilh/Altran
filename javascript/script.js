(function($){

    createBalise = function( type , idBls = null , classBls = null){

        let bls = $('<'+type+'></'+type+'>');
        bls.attr( 'id' , idBls );
        bls.attr( 'class' , classBls );

        return bls;

    };

    $('.classButton').on('click', function(){

        let saveId = $(this).attr('id');
            saveId = saveId[0].toUpperCase()+saveId.substring(1);

        $('.classCompetence').css('display','none');

        $('#div'+saveId).css('display','block');

    });

    $('#aAddComp').on('click', function(){

        let divContainer    = createBalise('div' , 'null', 'divContainer');
        let divCompetence   = createBalise('div' , 'test');
        let inputCompetence = createBalise('input', 'inputCompetence');
        let inputSelect     = createBalise('select', 'inputSelectCompetence');
        let optionNotions   = createBalise('option');
        let optionDebutant  = createBalise('option');
        let optionInter     = createBalise('option');
        let optionAvancé    = createBalise('option');
        let optionExpert    = createBalise('option');

        optionNotions.text('notion');
        optionDebutant.text('Débutant');
        optionInter.text('Intermédiaire');
        optionAvancé.text('Avancé');
        optionExpert.text('Expert');

        inputCompetence.attr('name','inputCompetence'+$('.divContainer').length);
        inputSelect.attr('name','inputSelectCompetence'+$('.divContainer').length);
        optionNotions.attr('value','notions');
        optionDebutant.attr('value','debutant');
        optionInter.attr('value','intermediaire');
        optionAvancé.attr('value','avance');
        optionExpert.attr('value','expert');

        divContainer.append(divCompetence);
        divCompetence.append(inputCompetence);
        divCompetence.append(inputSelect);
        inputSelect.append(optionNotions);
        inputSelect.append(optionDebutant);
        inputSelect.append(optionInter);
        inputSelect.append(optionAvancé);
        inputSelect.append(optionExpert);

        $('#divListCompetences').append(divContainer);
        $("#inputHidden").attr('value',$('.divContainer').length);
    });

})(jQuery);
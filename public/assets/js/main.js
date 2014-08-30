var CU = CU || {};

CU.uni = (function() {
    // Function-level strict mode syntax - https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions_and_function_scope/Strict_mode
    // 'use strict';
    var $selectListCost = $('#selectListCost'),
        $selectListLevel = $('#selectListLevel'),
        $selectListType = $('#selectListType'),
        $selectListLanguage = $('#selectLanguageLevel'),

        $rtArrow = $('#arrow'),
        selectCost = ('.all'),
        selectLevel = ('.all'),
        selectType = ('.all'),
        selectLanguage = ('.all');

    function initialize() {
        console.log('init');
        addEventListeners();
    }

    function addEventListeners() {
        console.log($selectListType);
        $selectListCost.bind('change', dropClick);
        $selectListLevel.bind('change', dropClick);
        $selectListType.bind('change', dropClick);
        $selectListLanguage.bind('change', dropClick);
        $rtArrow.on( "click", function(e) {
            console.log('click');
            e.preventDefault();
            $('#side').css("margin-left", "10px");
            // show hide arrow
        });
    }

    function dropClick() {
        console.log(this);
        var id = $(this).attr('id');
        console.log(id);
        console.log(this.value);
        // var filterChoice = (this.value).toLowerCase();
        var filterChoice = (this.value);
        console.log(filterChoice);
        // TODO CASE
        if(id == "selectListCost"){
            selectCost = ('.' + filterChoice);
        }
        else if (id == "selectListLevel"){
            selectLevel = ('.' + filterChoice);
        }
        else if (id == "selectListType"){
            selectType = ('.' + filterChoice);
        }
        else {
            selectLanguage = ('.' + filterChoice);
        }
        filter(filterChoice);
    }
    function displayNone(){
        $('.resource').hide();
    }
    function filter(filterChoice){
        displayNone();
        var classFilter = ('.' + filterChoice);
        console.log(classFilter);
        $('.resource').filter(selectCost + selectLevel + selectType + selectLanguage).show();
    }
    return {
        initialize: initialize
    };

})();
$(document).ready(CU.uni.initialize);

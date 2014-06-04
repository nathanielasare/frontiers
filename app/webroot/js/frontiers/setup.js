/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @Date: 2014 4 2014
 * @Description: Javascript to handle setup page
 */

var setup = {
    init: function() {
        $("form #add-setup-form").on("submit", function(event) {
            event.preventDefault();
            console.log($(this).serialize());
        });
        $('#add-setup-btn').click(function() {
            setup.addSetup();
        });
    },
    addSetup: function() {
        form_data = $('#add-setup-form').serialize();
        console.log(form_data);
    }
}

$(document).ready(function() {
    setup.init();
});


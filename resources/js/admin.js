import './bootstrap';
import Alpine from 'alpinejs';
import axios from 'axios';
window.Alpine = Alpine;

Alpine.start();
class Admin {
    applicationDelete() {
        $('#application button').click((e) => {
            axios.post('/admin/deleteapp', {
                application_delete: e.target.value
            })
                .then(function (response) {

                    if (response.data) {
                        $('#application_' + response.data.id).remove()
                    }

                })
                .catch(function (error) {
                    //console.log(error)
                });
        })
    }
    reviews() {
        var tab = $('#tabs .tabs-items > div');
        tab.hide().filter(':first').show();

        // Клики по вкладкам.
        $('#tabs .tabs-nav a').click(function () {
            tab.hide();
            tab.filter(this.hash).show();
            $('#tabs .tabs-nav a').removeClass('active');
            $(this).addClass('active');
            return false;
        }).filter(':first').click();

        return false;
    }
    display() {
        this.applicationDelete();
        this.reviews()
    }
}

const admin = new Admin();
$(document).ready(() => {
    admin.display();
})

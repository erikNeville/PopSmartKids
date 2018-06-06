(function ($) {
    'use strict';
    wp.iconPicker = {

        init: function () {
            $('.iconpicker-items>i').on('click', function () {
                var iconClass = $(this).attr('title');
                iconClass = iconClass.substr(1);
                var classInput = $(this).parents('.iconpicker-popover').prev().find('.icp');
                classInput.val(iconClass);
                classInput.attr('value', iconClass);

                var iconPreview = classInput.next('.input-group-addon');
                var iconElement = '<i class="fa '.concat(iconClass, '"><\/i>');
                iconPreview.empty();
                iconPreview.append(iconElement);
                classInput.trigger('change');
                return false;
            });
        },
        search: function ($searchField) {
            var itemsList = $searchField.parent().next().find('.iconpicker-items');
            var searchTerm = $searchField.val().toLowerCase();
            if (searchTerm.length > 0) {
                itemsList.children().each(function () {
                    if ($(this).filter('[title*='.concat(searchTerm).concat(']')).length > 0 || searchTerm.length < 1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                itemsList.children().show();
            }
        },
        iconPickerToggle: function ($input) {
            var iconPicker = $input.parent().next();
            iconPicker.addClass('iconpicker-visible');
        }
    };

    $(document).ready(function () {
        wp.iconPicker.init();

        $('.iconpicker-search').on('keyup', function () {
            wp.iconPicker.search($(this));
        });

        $('.icp-auto').on('click', function () {
            wp.iconPicker.iconPickerToggle($(this));
        });

        $(document).mouseup( function (e) {
            var container = $('.iconpicker-popover');

            if (!container.is(e.target) && container.has(e.target).length === 0)
            {
                container.removeClass('iconpicker-visible');
            }
        });
    });

})(jQuery);

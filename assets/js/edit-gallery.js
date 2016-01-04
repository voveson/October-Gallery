/**
 * Created by Vince on 12/28/2015.
 */
var imageSortableElement;

$(function(){
    initImageTable();

    // Listen for the list widget to be reloaded, and re-initialize the sortable table
    $(document).bind('DOMNodeInserted', function(e) {
        el = $(e.target);

        if (el.is('.list-widget'))
            setTimeout(initImageTable, 200);
    });
});

function initImageTable()
{
    // Remove the strange 'a' tag that images get wrapped in
    $('.ad-image-preview').each(function() {
        img = $(this);
        td = img.closest('td');
        a = img.closest('a');

        td.prepend(img);
        a.remove();
    });

    // Set up sortable table rows
    var images_div = $('#Galleries-update-RelationController-images-view');
    var table = images_div.find('table');

    table.find('tr').each(function(){
        row = $(this);

        if(!row.is('.no-data'))
        {
            td = row.find('td').first();
            td.append('<br><i class="icon-sort sort-handle"></i>');

            setRowDataAttrs(row);

            // Hide the 'display order' column
            td = row.find('td').last();
            td.css('display', 'none');
            th = row.find('th').last();
            th.css('display', 'none');
        }
    });

    imageSortableElement = table.find('tbody');

    imageSortableElement.sortable({
        items: 'tr',
        handle: '.sort-handle',
        helper: fixedWidthHelper,
        update: onImageSortUpdate
    });
}

function setRowDataAttrs(row)
{
    image_id = row.find('input[type="checkbox"]').attr('value');

    row.attr('id', 'sort_' + image_id);
}

function fixedWidthHelper(e, ui)
{
    ui.children().each(function() {
        $(this).width($(this).width());
    });

    return ui;
}

function onImageSortUpdate(e, ui)
{
    serialized = imageSortableElement.sortable('toArray');

    trimmed = [];

    $.each(serialized, function(i, obj) {
        trim = obj.substring(5);
        trimmed.push(parseInt(trim));
    });

    console.log('serialized', serialized);
    console.log('trimmed', trimmed);
}
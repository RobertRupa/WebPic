function getImagesByUniqueId(squ, all, limit, filename, target) {

    url = "https://pict.olimp-labs.com/api/product/?unique_id=" + squ + "&limit=" + limit + "&all=" + all + "&filename=" + filename;
    var images = [];

    return $.getJSON(url).then(function(data) {
        $(data).each(function(i, item) {
            images.push({
                'src': item[5],
                'alt': item[4]
            });
            imagesContent = galleryTemplate(images);
            $(target).html();
            $(target).append(imagesContent);
        });



    });
}

function galleryTemplate(images) {
    var html = '';
    $(images).each(function(i, item) {
        html += '<a href="' + item['src'] + '" title="' + item['alt'] + '"><img src="' + item['src'] + '" alt="' + item['alt'] + '"/></a>';
    });
    return html;
}
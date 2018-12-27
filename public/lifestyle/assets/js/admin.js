CKEDITOR.replace('reature-text');

$(window).load(function(){
    var featureName = $("#feature-name");
    var featureAlias = $("#feature-alias");

    featureName.focusout(function(){
        var alias = featureName.val()
            .toLowerCase()
            .replace(/[^0-9A-Za-z_-\s]/g, "")
            .trim()
            .replace(/(\s|_)+/g, "-");
        featureAlias.val(alias);
    });
});
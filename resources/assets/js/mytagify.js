//tagify js

// function mytagify(suggestions){
var suggestions = (arrayJSON('.hidden-li-contact'))
console.log(suggestions)

var tagify = new Tagify(document.querySelector('input[name=tags3-1]'), {
    delimiters : null,
    tagTemplate : function(v, tagData){
        return `
                            
                        
                        ${v}
                    
                `;
    },
    enforceWhitelist : false,
    whitelist : suggestions,
    pattern : '[A-Z]',
    dropdown : {
        enabled: 1, // suggest tags after a single character input
        classname : 'extra-properties', // custom class for the suggestions dropdown
        itemTemplate : function(tagData){ return `${tagData.value}` }
    },
    mapValueToProp : "code", // map tags' values to this property name, so this property will be the actual value and not the printed value on the screen
})

tagify.on('remove', function(e){
    console.log(e, e.detail);
});

tagify.on('add', function(e){
    console.log( tagify.DOM.originalInput, tagify.DOM.originalInput.value);
});

    // add the first 2 tags from the "allowedTags" Aray automatically
    // tagify.addTags(tagify.settings.whitelist.slice(0,2));
// }


// tagify end

//sent box scripts
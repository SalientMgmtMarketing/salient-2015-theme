(function () {
  'use strict';
  tinymce.create('tinymce.plugins.buttonlink', {
    init : function (ed, url) {
      ed.addButton('buttonlink', {
        title : 'Add a Button',
        image : url + '/button-shortcode.png',
        onclick : function () {

          ed.windowManager.open({
            title: "Add a Button",
            body: [
              { type: 'listbox',
                label: 'Choose a Color:',
                name: 'color',
                onselect: function (e) {},
                'values': [
                  {text: 'blue', value: 'blue'},
                  {text: 'lt-blue', value: 'lt-blue'},
                  {text: 'dark-gray', value: 'dk-gray'},
                  {text: 'lt-gray', value: 'lt-gray'},                  
                  {text: 'orange', value: 'orange'},
                  {text: 'lt-orange', value: 'lt-orange'},
                  {text: 'dk-orange', value: 'dk-orange'},
                  {text: 'purple', value: 'purple'},
                  {text: 'pink', value: 'pink'}                                    
                ],
                id: 'mceColor'
                },
              { type: 'textbox',
                name: 'href',
                label: 'Link URL',
                value: '',
                id: 'mceHref'
                },
              { type: 'textbox',
                name: 'text',
                label: 'Link Text',
                value: '',
                id: 'mceText'
                }
            ],
            onsubmit: function () {
              ed.selection.setContent('[button href="' + document.getElementById('mceHref').value + '" color="' + document.getElementById('mceColor').textContent + '"]' + document.getElementById('mceText').value + '[/button]');
            }
          });
        }
      });
    },
    createControl : function (n, cm) {
      return null;
    }
  });
  tinymce.PluginManager.add('arrowsc', tinymce.plugins.arrowsc);
  tinymce.create('tinymce.plugins.arrowsc', {
    init : function (ed, url) {
      ed.addButton('arrowsc', {
        title : 'Add an Arrow',
        image : url + '/button-shortcode.png',
        onclick : function () {

          selected = tinyMCE.activeEditor.selection.getContent();

            if( selected ){
              //If text is selected when button is clicked
              //Wrap shortcode around it.
              content =  selected+'[arrow]';
            }else{
              content =  '[arrow]';
            }

            tinymce.execCommand('mceInsertContent', false, content);
        }
      });
    },
    createControl : function (n, cm) {
      return null;
    }
  });
  tinymce.PluginManager.add('buttonlink', tinymce.plugins.buttonlink);
  tinymce.PluginManager.add('arrowsc', tinymce.plugins.buttonlink);
}());
pimcore.registerNS("pimcore.plugin.ExportBundle");

pimcore.plugin.ExportBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.ExportBundle";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);

    },


    prepareObjectTreeContextMenu: function (menu, treeClass, object) {
        let menuItems = menu.items.getRange();
        let menuItemsCount = menuItems.length;

            menu.insert(menuItemsCount-1,{
                text: "Export This",
                icon: "/bundles/pimcoreadmin/img/flat-color-icons/download.svg",
                handler: function() {
                    synchronize(object);
                }
            });

        }
    


});

varExportBundlePlugin = new pimcore.plugin.ExportBundle();

function synchronize(object) {

    pimcore.helpers.loadingShow();
    Ext.Ajax.request({
        url: "exportJsonTree/"+object.id,
        params: {
            csrfToken: pimcore.settings["csrfToken"],
        },
        method: 'GET',
        success: function(response) {
            var jsonData = Ext.decode(response.responseText);
            
                var jsonString = Ext.JSON.encode(jsonData);

                var blob = new Blob([jsonString], { type: "application/json" })
                const url = window.URL.createObjectURL(blob)
                const a = document.createElement('a')
                a.href = url
                a.download = 'export.json'
                a.style.display = 'none'
                document.body.appendChild(a)
                a.click()
                window.URL.revokeObjectURL(url)
        }
    })
    pimcore.helpers.loadingHide();

}




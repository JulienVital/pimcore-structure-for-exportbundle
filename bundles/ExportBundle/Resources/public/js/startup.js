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
                    // synchronize(object);
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
            console.log(FileSystem);
            pimcore.helpers.loadingHide();
        }
    })
}




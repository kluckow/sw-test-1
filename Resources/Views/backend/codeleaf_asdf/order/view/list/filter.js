//{block name="backend/order/view/list/filter" append}
Ext.override(Shopware.apps.Order.view.list.Filter, {

    createFilterForm: function() {
        var me = this;
        me.callParent(arguments);

        me.callParent().filterForm.items.push(me.createRefererField());
    },

    createRefererField: function() {
        var me = this;

        return Ext.create('Ext.form.field.ComboBox', {
            // name: 'orders.shopId',
            // store: Ext.create('Shopware.store.Shop', { pageSize: 7 }),
            // valueField: 'id',
            // pageSize: 7,
            // queryMode: 'remote',
            displayField: 'name',
            emptyText: 'empzx',
            fieldLabel: 'lmao'
        });
    }
});
//{/block}
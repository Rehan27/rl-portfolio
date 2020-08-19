const { registerPlugin } = wp.plugins;
const { PluginDocumentSettingPanel } = wp.editPost;

const PluginDocumentSettingPanelDemo = () => (
    <PluginDocumentSettingPanel
        name="custom-panel"
        title="Custom Panel"
        className="custom-panel"
    >
        Custom Panel Contents
    </PluginDocumentSettingPanel>
);
registerPlugin( 'plugin-document-setting-panel-demo', {
    render: PluginDocumentSettingPanelDemo,
    icon: 'palmtree',
} );
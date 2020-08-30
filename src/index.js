const {registerPlugin} = wp.plugins;
const {PluginDocumentSettingPanel} = wp.editPost;
const {useSelect} = wp.data;

const PluginDocumentSettingPanelGallery = () => {
    const postType = useSelect(select => select('core/editor').getCurrentPostType());
    if ('rl_project' !== postType) {
        return null;
    }
    return (
        <PluginDocumentSettingPanel name="project-gallery" title="Gallery" className="gallery-panel">
        </PluginDocumentSettingPanel>
    );
}
registerPlugin('plugin-document-setting-panel-gallery', {
    render: PluginDocumentSettingPanelGallery,
    icon: null,
});
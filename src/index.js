const { createElement } = wp.element;
const { registerBlockType } = wp.blocks;

registerBlockType(
    'wp-scripts-block/wp-scripts-block',
    {
        title: 'WP Scripts Build Tool',
        icon: 'shield',
        category: 'common',
        supports: {
            html: false
        },
        edit: function () {
            return <div>Hey, Gutenberg!</div>;
        },
        save: function () {
            return <div>Hey, Gutenberg!</div>;
        }
    }
);


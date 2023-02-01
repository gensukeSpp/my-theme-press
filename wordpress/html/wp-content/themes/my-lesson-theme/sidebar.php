<aside>
    <h3>ウィジェットエリア</h3>
    <?php if(!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'sidebar-widget' )): ?>
        <div class="widget">
            <h2>No Widget</h2>
            <p>ウィジットは設定されていません。</p>
        </div>
    <?php endif; ?>
</aside>
    
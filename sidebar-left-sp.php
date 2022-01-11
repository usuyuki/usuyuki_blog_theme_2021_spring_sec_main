<!-- 目次 -->
<div class="toc-card-wrapper" id="toc-card">
    <div class="toc-opener">
        <input type="checkbox" id="toc-x">
        <label for="toc-x">
            <div class="toc-open-button">
                <i class="fas fa-external-link-square-alt"></i>
                <p class="kiwi-maru ">もくじ</p>
            </div>
            <div class="toc-close-button">
                <i class="fas fa-times"></i>
            </div>
        </label>
        <div class="toc-content">
            <div class="toc-card ">
                <?php dynamic_sidebar( 'side-table-of-content' ); ?>
            </div>
        </div>
    </div>
</div>
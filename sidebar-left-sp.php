<!-- 目次 -->
<div class="toc-card-wrapper" id="toc-card">
    <div class="toc-opener">
        <input type="checkbox" id="toc-x">
        <label for="toc-x">
            <div class="toc-open-button">
                <i class="fas fa-external-link-square-alt"></i>
                <p class="h7">もくじ</p>
            </div>
            <div class="toc-close-button">
                <i class="fas fa-times"></i>
            </div>
        </label>
        <div class="toc-content">
            <div class="toc-card mt-4 border border-green-300 rounded-2xl p-12 sticky top-0 mx-12 ">
                <?php dynamic_sidebar( 'side-table-of-content' ); ?>
            </div>
        </div>
    </div>
</div>
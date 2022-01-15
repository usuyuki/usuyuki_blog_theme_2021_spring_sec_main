<!-- 右サイドバー -->
<div class="right-sidebar-card-wrapper" id="right-sidebar-card">
    <div class="right-sidebar-opener">
        <input type="checkbox" id="right-sidebar-x">
        <label for="right-sidebar-x">
            <div class="right-sidebar-open-button">
                <i class="far fa-caret-square-down"></i>
                <p class="kiwi-maru ">めにゅー</p>
            </div>
            <div class="right-sidebar-close-button">
                <i class="fas fa-times"></i>
            </div>
        </label>
        <div class="right-sidebar-content">
            <div class="right-sidebar-card ">
                <?php   get_sidebar('right-core'); ?>
            </div>
        </div>
    </div>
</div>
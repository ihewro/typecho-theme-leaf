<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="wrap">
    <div class="container">
        <div class="comment">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
                <h2><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h2>
                <?php $comments->listComments(); ?>
                <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            <?php endif; ?>
            <?php if($this->allow('comment')): ?>
                <h3 class="response">添加新评论</h3>
                <div id="<?php $this->respondId(); ?>" class="respond">
                    <div class="cancel-comment-reply">
                        <?php $comments->cancelReply(); ?>
                    </div>
                    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                        <?php if($this->user->hasLogin()): ?>
                        <p>登录身份：<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> [ <a href="<?php $this->options->logoutUrl(); ?>" title="注销">注销</a> ] </p>
                        <?php else: ?>
                        <p>
                            <label for="author" class="required">昵称：</label>
                            <input type="text" name="author" id="author" class="text" placeholder="(⊙3⊙)昵称" value="<?php $this->remember('author'); ?>" required />
                        </p>
                        <p>
                            <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>>邮箱：</label>
                            <input type="email" name="mail" id="mail" class="text" placeholder="example@example.com" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                        </p>
                        <p>
                            <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>>网址：</label>
                            <input type="url" name="url" id="url" class="text" placeholder="http://" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                        </p>
                        <?php endif; ?>

                        <p>
                            <label for="textarea" class="required">留言：</label>
                            <textarea name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
                        </p>
                        <p>
                            <button type="submit" class="comment-submit">提交</button>
                        </p>
                    </form>
                </div>
            <?php else: ?>
            <h3 class="response"><?php _e('评论已关闭'); ?></h3>
            <?php endif; ?>
        </div>
    </div>
</div>

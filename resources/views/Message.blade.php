<?php
if (empty($user['img'])) {
    $userAvatar = 'user.png';
} else {
    $userAvatar = $user['img'];
}

?>
<div class="wrapper">
    <section class="chat-area">
        <header>
            <a href="/user/list" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="/public/frontend/images/<?= $userAvatar ?>" alt="">
            <div class="details">
                <span><?= $user['full_name'] ?></span>
                <p><?= ucwords($user['status']) ?></p>
            </div>
        </header>

        <div class="chat-box"></div>

        <form action="#" class="typing-area">
            <input type="text" class="chat_user_id" name="chat_user_id" value="<?= $user['id'] ?>" hidden>
            <input type="text" class="incoming_id" name="incoming_id" value="<?= $user['unique_id'] ?>" hidden>
            <input type="text" name="message" class="input-field" placeholder="Type a message here..."
                   autocomplete="off">
            <button class="btn-send"><i class="fab fa-telegram-plane"></i></button>
        </form>
    </section>
</div>
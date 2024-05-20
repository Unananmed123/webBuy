<?php

/** @var $users */
/** @var $userModel */

?>
<div class="containerIndex">
    <div class="admins">
        <div class="welcome">
            <span>Панель управления</span><br>
        </div>
        <span>Все пользователи:</span>
        <div class="users">
            <?php foreach ($users as $item): ?>
                <div class="user">
                    <div class="userInfo">
<!--                        <div class="userText">-->
<!--                            <div class="userId"><span class="userIdText">Id:</span>--><?php //= $item->id ?><!--</div>-->
<!--                        </div>-->
<!--                        <div class="userText">-->
<!--                            <div class="userName"><span class="userNameText">Name:</span>--><?php //= $item->login ?><!--</div>-->
<!--                        </div>-->
<!--                        <div class="userText">-->
<!--                            <div class="isAdmin"><span class="isAdminText">Is_admin:</span>--><?php //= $item->is_admin ?><!--</div>-->
<!--                        </div>-->
                        <table>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Is_admin</td>
                            </tr>

                            <tr>
                                <td><?= $item->id ?></td>
                                <td><?= $item->login ?></td>
                                <td><?= $item->admin ?></td>
                            </tr>
                        </table>

                        <div class="userBtns">
                            <div class="change">
                                <a href="/admin/username?id=<?= $item->id ?>">✏️</a>
                            </div>
                            <div class="getAdmin">
                                <a href="/admin/new-admin?id=<?= $item->id ?>">➕</a>
                            </div>
                            <div class="unsetAdmin">
                                <a href="/admin/delete-admin?id=<?= $item->id ?>">➖</a>
                            </div>
                            <div class="deleteUserAdminPanel">
                                <a href="/admin/delete-user?id=<?= $item->id ?>">❌</a>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>
        </div>
    </div>

</div>

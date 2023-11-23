<?php

namespace Task11;

function areUsersEqual(User $user1, User $user2): bool {
    return $user1->id === $user2->id;
}
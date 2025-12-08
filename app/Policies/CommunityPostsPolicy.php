<?php

namespace App\Policies;

use App\Models\CommunityPosts;
use App\Models\UserAuth;
use Illuminate\Auth\Access\Response;

class CommunityPostsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(UserAuth $userAuth): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(UserAuth $userAuth, CommunityPosts $communityPosts): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(UserAuth $userAuth): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(UserAuth $userAuth, CommunityPosts $communityPosts): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(UserAuth $userAuth, CommunityPosts $communityPosts): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(UserAuth $userAuth, CommunityPosts $communityPosts): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(UserAuth $userAuth, CommunityPosts $communityPosts): bool
    {
        return false;
    }
}

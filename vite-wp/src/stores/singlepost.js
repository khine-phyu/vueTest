import { ref } from 'vue'
import { defineStore } from 'pinia'
import { API } from "../api";

export const usePostStore = defineStore('posts', () => {

    const _post = ref(null)

    const storePost = async (post) => {
        _post.value = post
        console.log(post.id)
    }

    const getPost = async (postType, postId) => {
        const response = await API.posts.getPost(postType, postId)
        storePost(response)
    }

    return {
        _post,
        getPost,
        usePostStore
    }

})
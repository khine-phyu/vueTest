import { ref } from 'vue'
import { defineStore } from 'pinia'
import { API } from "../api";

export const usePostStore = defineStore('posts', () => {

    const _posts = ref(null)

    const storePost = (posts) => {
        _posts.value = posts
    }

    const getContentPost = async (postType) => {
        const response = await API.posts.getContent(postType)
        // storeposts(response[0])
        if (response) {
            storePost(response)
        } else {
            console.log("posts not found!")
        }
    }

    return {
        _posts,
        getContentPost,
        usePostStore
    }

})
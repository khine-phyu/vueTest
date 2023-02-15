// import { ref } from 'vue'
// import { defineStore } from 'pinia'
// import { API } from "../api";

// export const usePostStore = defineStore('posts', () => {

//     const _posts = ref(null)
//     // const _post = ref(null)

//     // const storePost = (posts) => {
//     //     _posts.value = posts
//     // }

//     const storePosts = async (post) => {
//         _post.value = post
//         console.log(post.id)
//     }

//     const getContentPost = async (postType) => {
//         const response = await API.posts.getContent(postType)
//         // storeposts(response[0])
//         if (response) {
//             storePost(response)
//         } else {
//             console.log("posts not found!")
//         }
//     }

//     // const getPost = async (postType, postId) => {
//     //     const response = await API.posts.getPost(postType, postId)
//     //     storePosts(response)
//     // }

//     return {
//         _posts,
//         getContentPost,
//         // _post,
//         // getPost,
//         usePostStore
//     }

// })
import { ref } from 'vue'
import { defineStore } from 'pinia'
import { API } from "../api";

export const usePostStore = defineStore('posts', () => {

    const _posts = ref(null)

    const storePosts = (posts) => {
        _posts.value = posts
    }

    const getPosts = async (postType) => {
        const response = await API.posts.getPosts(postType)
        // storePage(response[0])
        if (response) {
            storePosts(response)
        } else {
            console.log("page not found!")
        }
    }


    return {
        _posts,
        getPosts,
        usePostStore
    }

})
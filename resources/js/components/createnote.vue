<template>
    <div class="bg-gray-50 px-4 py-6 sm:px-6">
        <div class="flex space-x-3">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
            </div>
            <div class="min-w-0 flex-1">
                <form action="#">
                    <div>
                        <label for="comment" class="sr-only">About</label>
                        <textarea id="comment"  name="comment" rows="3" class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md p-4" placeholder="Add a note"></textarea>
                    </div>
                    <div class="mt-3 flex items-center justify-end">
                        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Comment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "createnote"
}
</script>

<style scoped>

</style>

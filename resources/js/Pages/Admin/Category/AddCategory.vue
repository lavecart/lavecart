<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Category
            </h2>
        </template>

        <div class="container my-5 p-5 mx-auto">
            <div class="bg-white overflow-hidden shadow m-2">
                <div class="px-6 py-4" :class="{ 'bg-green-200': showGeneralSection}">
                    <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none" @click="openGeneralTab">

                        <div class="flex">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABWElEQVRIie1WMU7DQBCcxdcZlEhpLUEkiojGkegQFT/IDyioKPgBIj+gS5MmvMC8IDRRREfSQhEh+QfBkkXOdxSciR3jGOdsksLTrXc1Y9/ungeo8E+gaNDszUeAtFTKnV0fnOuQr+Nj8VJpAXQIAKbBG85wPNARvn3jthewfcUdy+3pEOtg5YvJNQ3eAAAvYNPOxdmlDnmzNz82DW4rPndtsTMcD3SP+C987LfiKF7uZ3Uwv52WF1L6pzcnz3lfKFMYzG9L0FNamojeARzlFd7acO3KVOcH90W933K6YUwCk6vXzmPpwmIR1EjS3fKJfACQKVz1OAEhpa9WBsB3T8UiqIXx5wcvR1hdDj972m853XhPN0PV40yQwEStTFrFqBRhdTlk7mkWtnbUCc8V+XFPi/BcaXwJzxV6JNPgdsGey4rmdmWqyQ3doBcwtwjPFbW3OlwVNsYXbLeLcIABfjwAAAAASUVORK5CYII="/>
                            <span class="text-grey-darkest font-thin text-xl ml-2">
                                General
                            </span>
                        </div>
                        
                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                            <!-- icon by feathericons.com -->
                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="6 9 12 15 18 9">
                                </polyline>
                            </svg>
                        </div>
                    </header>

                </div>

                
                <div class="px-6 pb-4 pt-12" v-if="showGeneralSection">
                    <form class="w-full px-5 pl-8 pr-8">
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-first-name">
                                    Category Name
                                </label>
                                <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="T-Shirt">
                                <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                            </div>


                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-state">
                                    Parent Category
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option>Select Parent</option>
                                        <option>Men</option>
                                        <option>Women</option>
                                        <option>Baby</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="w-full md:w-1/2 mb-5">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" checked><span class="ml-2 text-gray-700">Enagle the Category</span>
                            </label>
                        </div>
                    </form>
                </div>
                
            </div>

            <div class="bg-white overflow-hidden shadow m-2">
                <div class="px-6 py-4" :class="{ 'bg-green-200': showDescriptionAndImageSection}">
                    <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none" @click="openDescriptionAndImageTab">

                        <div class="flex">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACjUlEQVRIie2WS08TURTHf3dKpSUtFEkEJZCoCAsTP4Y71n4B9n4JvwzujFuNaxeKApGIVgQqKtDHlMfMdOae42KgUEofQHHFP7nJzL3nzO+ex8xcuNF/kjk7Mbulk44y3UuIGFZf3zMbLcGzWzrpwFcDqV6CFXyU6VfjZvN4zjltkDA86DUUwEDKODw8Pee0Mr6okkZJGenavq8X0Kf9e8wNFOkzyrw3zLyX6+hz5YiTRpkbKJI0igGepcvccaLrBydQEkbr9+ZoM9cO9tXhpTfMMepNkOWXTXb066rGKlDZ9ggDS240za1UomF93svxLsiQNNoVtCuwqlJYrbJXCgAo//GYfJwjnWkEbMvF+rRtqtUq68sV3B0fsYpYJawJPxfLHO6FDbY2Uuhc2rpabtNGwtpSmcNq2LQmoqwtlrn/ZJh0JkmxcEC1GOA4hrGpLKmBztGfaxHVhPynEt5+M7QOt5b8QomRsTS1wMZ+oVBYcRmfGSKdaQ9vSnUYWL593OWgGiAibUdYi/hb2CeKTr5YYpXNlUrbTTeB3W1vZOX9DgdurV7TTsOGgrvrE4UnBRarbCxXmvqgDTiY8PfDrqGNcI8oPIncWmV98fweaQILgohealgruEW/Cb72+Xx4YwfYOE2Xl1It+WRz/Rgn/tXbSPixUOLuzOBYS7DIVcGxv1v0yeT6cY7gUSh45aA1OIZfDXz8DLfkMzh0EvlZNYAjtXLViOuySuUo7Y4xqKHhlNAAdguH+V5EXJcobtEjO5TicNfPtwSXynYp4ahPj89dexVfE8m+L6fnmgqQfvF9wknIzHkPuD068Mj0mSyAiFBPnkh8aeMGjV9M4nWBhNi3v59PfehdKDe6gP4BcKTSe0wExd8AAAAASUVORK5CYII="/>
                            <span class="text-grey-darkest font-thin text-xl ml-2">
                                Description and Image
                            </span>
                        </div>
                        
                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                            <!-- icon by feathericons.com -->
                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="6 9 12 15 18 9">
                                </polyline>
                            </svg>
                        </div>
                    </header>
                </div>

                <div class="px-6 pb-4 pt-12" v-if="showDescriptionAndImageSection">
                    <form class="w-full px-5 pl-8 pr-8">
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-first-name">
                                    Category Description
                                </label>
                                <textarea 
                                    class="border rounded text-grey-darkest w-full p-2 bg-transparent" 
                                    name="categoryDescription" placeholder="Description of Category"
                                    rows="5"
                                ></textarea>
                            </div>


                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-state">
                                    Category Image
                                </label>

                                <!--UPLOAD-->
                                <form enctype="multipart/form-data" novalidate v-if="isInitial || isSaving">
                
                                    <div class="dropbox">
                                    <input type="file" multiple :name="uploadFieldName" :disabled="isSaving" @change="filesChange($event.target.name, $event.target.files); fileCount = $event.target.files.length"
                                        accept="image/*" class="input-file">
                                        <p v-if="isInitial">
                                        Drag your file(s) here to begin<br> or click to browse
                                        </p>
                                        <p v-if="isSaving">
                                        Uploading {{ fileCount }} files...
                                        </p>
                                    </div>

                                </form>

                                <!--SUCCESS-->
                                <div v-if="isSuccess">
                                    <h2>Uploaded {{ uploadedFiles.length }} file(s) successfully.</h2>
                                    <p>
                                    <a href="javascript:void(0)" @click="reset()">Upload again</a>
                                    </p>
                                    <ul class="list-unstyled">
                                    <li v-for="item in uploadedFiles" :key="item.id">
                                        <img :src="item.url" class="img-responsive img-thumbnail" :alt="item.originalName">
                                    </li>
                                    </ul>
                                </div>

                                <!--FAILED-->
                                <div v-if="isFailed">
                                    <h2>Uploaded failed.</h2>
                                    <p>
                                    <a href="javascript:void(0)" @click="reset()">Try again</a>
                                    </p>
                                    <pre>{{ uploadError }}</pre>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow m-2">
                <div class="px-6 py-4" :class="{ 'bg-green-200': showSEOSection}">
                    <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none" @click="openSEOTab">
                        
                        <div class="flex">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAEAElEQVRIie2WS0ycVRTHf/d+30xhOkLbKZRhprxs6KLSopYxptG4sKtKiDbpQqPGR1waUzQhGCNptZBUiDvjBh9dmFpXbUlc1aRNjdSaYG0NviiP4TG1QGBghpn57r0uqBSY+Qaw7vRsbnJy/+d37uPce+C/ZmJDs9uMXVkwFkGIaq11KYCU8hZKDwylQ9/TJpx/FVzdEd2nkEfBPAVsc5k2CaJHW6oz+tbOa/cELv9gbLud0V0I8Rwg15MkoDHilDK6ebQ1PLlh8M73Jx4QljoLVK8TuMrMgFF208jbZdfXDb4DvQwU/TPoUvgZEAeGW4I31gSHTkQDlpS9YO7PFcq2BA1lFg2lgkKpwRhSjub6RIqvf09hF2XlOpjWMjLRGvxzuTPr3CzJh27Q0H2SL5r8hEWcb/pnqCkp4HB9MYXCoefaVC4oQJVXmJOrnSvA4ZMje0E8m0sN8O7jm5meS3Pq2xg/JXw0X0gQTxmefriE2iKNTiRyC4V5vrJ99EFXsFRW82rf3+b3Cup32MSmF5C2DQLm0oZL0QwAZcVetHItY2kEr+cGtxkbzCE3pddaHGvLCtHpDGAAiKcWx6l5ByEtNzlA4yJjFbiyYCwCBNxU00lDNK6oLinkUF0xzswMloD9QQ8/DM3z860Mls+XDxyoKhzdnwVGiLz1aoBjFxNMJjTHD9fQ/mQxHx3cRCK5wBunB7CD5SDyP4RK32XcBRsTzKsC+mIOjWdmefn8LB6/j/qwj88vjTHv8SMsey05ElOeC2zWVAKOMvTf1lwYUgC0HKpkty+JSibX1GrBEmPZVsvxtYRBv+TVfZs48ZiXRwIZxmczBPwePn5hNzvVFHphIX8AI0azwZjBfJpHwzannyliu0nQdi7K8e8cmr6a47WeOA6Cd5qqyNyK5eVa0gxlgYdqynuB226ioxEf0ek0x84NkyouBWuxdPpiDt0/LrAn5ENn0uB+YpODydDV7BUfEQojetxUJZslU/E0Wsqsy+uRglhcISzperMFnF3eKKx4pbRQnYDKJeybcHioys/BWj/O7MySv67U5qW9BZy5EsMq2uKWt9LK6lqVyEqraB/7FGFeXO0v3Sx57wkf9Ts8/BZLMjSVJrRlE5UBD90XJ+juS2BvDeRcsYHukZbQK3nB4a6RbTIte4FduVKvKLLYvRUKUAxOpuifNmRsLwjXBuWmY4vI2JvlK+5PzgOp6BjfA+YymGK3aOsz90YgZ5rDLcEbSusI8Ms9QP9wg7qCAUZbw78qbQ5gxGeA3gBRCfhEe1XEDQrrbG/DHSN1EnkUaMT9B7sNnDfK6nRr8DYMXrIvjVV1c7Rh8ZcxZXdCTBijB6K7wlc5InKW4v8G8Be16oFd1wFboAAAAABJRU5ErkJggg=="/>
                            <span class="text-grey-darkest font-thin text-xl ml-2">
                                Search Engine Optimization
                            </span>
                        </div>
                        
                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center">
                            <!-- icon by feathericons.com -->
                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="6 9 12 15 18 9">
                                </polyline>
                            </svg>
                        </div>
                    </header>
                </div>

                <div class="px-6 pb-4 pt-12" v-if="showSEOSection">
                    <form class="w-full px-5 pl-8 pr-8">
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-first-name">
                                    Meta Tag
                                </label>
                                <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="T-Shirt">
                            </div>


                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-first-name">
                                    Slug: 
                                </label>
                                <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="tshirt">
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-first-name">
                                    Meta Keyword
                                </label>
                                <input class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="tshirt">
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 mb-2" for="grid-first-name">
                                    Meta Description
                                </label>
                                <textarea rows="3" 
                                class="border rounded text-grey-darkest w-full p-2 bg-transparent" 
                                placeholder="Meta Description"></textarea>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>

import AppLayout from './../../../Layouts/AppLayout'
import { upload } from './showCategoryImage'; // fake service
 import { wait } from './delayUpload';
const STATUS_INITIAL = 0, STATUS_SAVING = 1, STATUS_SUCCESS = 2, STATUS_FAILED = 3;

export default {

    data() {
        return {
            showGeneralSection: false,
            showDescriptionAndImageSection: false,
            showSEOSection: false,

            uploadedFiles: [],
            uploadError: null,
            currentStatus: null,
            uploadFieldName: 'photos'
        }
    },

    components: {
        AppLayout,
    },

    computed: {
      isInitial() {
        return this.currentStatus === STATUS_INITIAL;
      },
      isSaving() {
        return this.currentStatus === STATUS_SAVING;
      },
      isSuccess() {
        return this.currentStatus === STATUS_SUCCESS;
      },
      isFailed() {
        return this.currentStatus === STATUS_FAILED;
      }
    },

    methods: {

        openGeneralTab() {
            this.showGeneralSection = !this.showGeneralSection;
        },

        openDescriptionAndImageTab() {
            this.showDescriptionAndImageSection = !this.showDescriptionAndImageSection;
        },

        openSEOTab() {
            console.log("SEO");
            this.showSEOSection = !this.showSEOSection;
        },

        reset() {
            // reset form to initial state
            this.currentStatus = STATUS_INITIAL;
            this.uploadedFiles = [];
            this.uploadError = null;
        },
        save(formData) {
            // upload data to the server
            this.currentStatus = STATUS_SAVING;

            upload(formData)
            .then(x => {
                this.uploadedFiles = [].concat(x);
                this.currentStatus = STATUS_SUCCESS;
            })
            .catch(err => {
                this.uploadError = err.response;
                this.currentStatus = STATUS_FAILED;
            });
        },
        filesChange(fieldName, fileList) {
            // handle file changes
            const formData = new FormData();

            if (!fileList.length) return;

            // append the files to FormData
            Array
            .from(Array(fileList.length).keys())
            .map(x => {
                formData.append(fieldName, fileList[x], fileList[x].name);
            });

            // save it
            this.save(formData);
        }
    },
    
    mounted() {
      this.reset();
    },
}
</script>
<style scoped>
.dropbox {
    outline: 2px dashed grey; /* the dash box */
    outline-offset: -10px;
    background: lightcyan;
    color: dimgray;
    padding: 10px 10px;
    min-height: 200px; /* minimum height */
    position: relative;
    cursor: pointer;
}

.input-file {
    opacity: 0; /* invisible but it's there! */
    width: 100%;
    height: 200px;
    position: absolute;
    cursor: pointer;
}

.dropbox:hover {
    background: lightblue; /* when mouse over to the drop zone, change color */
}

.dropbox p {
    font-size: 1.2em;
    text-align: center;
    padding: 50px 0;
}

</style>

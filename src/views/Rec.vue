<template>
    <div class="Rec">
        <div class="container-fluid">
            <div class="rec-container">
                <div class="row no-gutter">
                    <div class="col">
                        <h1 class="title-text font-medium">Letters of Recommendation</h1>
                    </div>
                </div>
                <hr/>
                <div class="row no-gutter">
                    <div class="col">
                        <img class="rec-img-bmt" src="../assets/BMT.png"/>
                        <a class="pdf-link" href="http://www.donbrogdon.com/assets/BMT.pdf" target="_blank">
                            <svg class="download-btn" height="32pt" viewBox="0 0 512 512" width="32pt" xmlns="http://www.w3.org/2000/svg">
                                <path d="m409.785156 278.5-153.785156 153.785156-153.785156-153.785156 28.285156-28.285156 105.5 105.5v-355.714844h40v355.714844l105.5-105.5zm102.214844 193.5h-512v40h512zm0 0"/>
                            </svg>
                            <p style="display: inline-block; margin-left: 4px; color: black;">Download</p>
                        </a>
                    </div>
                    <div class="col">
                        <img class="rec-img-dod" src="../assets/DoD.png"/>
                        <a class="pdf-link" href="http://www.donbrogdon.com/assets/DoD.pdf" target="_blank">
                            <svg class="download-btn" height="32pt" viewBox="0 0 512 512" width="32pt" xmlns="http://www.w3.org/2000/svg">
                                <path d="m409.785156 278.5-153.785156 153.785156-153.785156-153.785156 28.285156-28.285156 105.5 105.5v-355.714844h40v355.714844l105.5-105.5zm102.214844 193.5h-512v40h512zm0 0"/>
                            </svg>
                            <p style="display: inline-block; margin-left: 4px; color: black;">Download</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Rec',
}
</script>

<style scoped lang="scss">
    @import './src/style/globals.scss';
    @import './src/style/fonts.scss';
    @import './src/style/buttons.scss';

    .title-text {
        margin-left: 24px;
        color: map-get($colors, primary-dark);
    }
    .rec-img-bmt {
        margin-left: 150px;
    }
    .rec-img-dod {
        margin-left: 200px;
        height: 535px;
        width: 550px;
    }
    .download-btn {
        border: 2px solid black;
        padding: 5px 5px 5px 5px;
    }

    @media only screen and (max-width: 1140px) {
        .pdf-link {
            margin-left: 0px;
        }
    }
</style>
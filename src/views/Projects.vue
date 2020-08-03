<template>
    <div class="Projects">
        <div class="container-fluid">
            <div class="project-container">
                <h1 class="font-medium title-text">Work</h1>
                <hr/>
                <div class="project-mo">
                    <div class="row no-gutter">
                        <div class="col">
                            <div class="project">
                                <h2 class="project-title font-medium">{{project[0].title}}</h2>
                                <h4 class="project-stack font-medium">{{project[0].stack}}</h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="project-btn-container">
                                <a href="https://melodicodyssey.com/"><button class="btn btn-mo">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-cc">
                    <div class="row no-gutter">
                        <div class="col">
                            <div class="project">
                                <h2 class="project-title font-medium">{{project[3].title}}</h2>
                                <h4 class="project-stack font-medium">{{project[3].stack}}</h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="project-btn-container">
                                <a href="https://github.com/ApproximatelyInfinity/Candy-Cane-Shooter"><button class="btn btn-mo">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-yp">
                    <div class="row no-gutter">
                        <div class="col">
                            <div class="project">
                                <h2 class="project-title font-medium">{{project[5].title}}</h2>
                                <h4 class="project-stack font-medium">{{project[5].stack}}</h4>
                            </div>
                        </div>
                        <div class="col">
                            <div class="project-btn-container">
                                <a href="https://www.yuppypuppyok.com"><button class="btn btn-mo">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Projects',
    props: {
    project: {
      type: Array
    },
    workexp: {
      type: Array
    },
  },
}
</script>

<style scoped lang="scss">
    @import './src/style/globals.scss';
    @import './src/style/fonts.scss';
    @import './src/style/buttons.scss';
    
    .project-container {
        margin-left: 24px;
        margin-right: 24px;
        .title-text {
            margin-left: 6px;
            color: map-get($colors, primary-dark);
        }
        .project {
            text-align: left;

            .project-title {
                margin-left: 10px;
            }
            .project-stack {
                margin-left: 14px;
            }

        }

        .project-btn-container {
            margin-top: 20px;
            text-align: right;

            button {
                margin-right: 10px;
            }
        }

        .project-mo:hover {
            background-color: #6D00BE;
            color: white;

            button {
                color: white;
                border: 2px solid white;
            }
        }

        .project-cc:hover {
            background-color: red;
            color: white;

            button {
                color: white;
                border: 2px solid white;
            }
        }

        .project-yp:hover {
            background-color: #EC6B8F;
            color: white;

            button {
                color: white;
                border: 2px solid white;
            }
        }
    }
</style>
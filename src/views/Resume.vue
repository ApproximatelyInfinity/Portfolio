<template>
    <div class="Resume">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col">
                    <h1 class="font-medium title-text">Resume</h1>
                    <hr/>
                </div>
            </div>
            <div class="row no-gutter">
                <div class="col">
                    <div class="resume-education font-medium">
                        <h2 class="font-medium">Education</h2>
                        <h6>{{education[0].university}}</h6>
                        <p>{{education[0].degree}} in {{education[0].subject}}  <br><i>{{education[0].date}}</i></p>
                        <br>
                        <p>{{education[1].degree}} in {{education[1].subject}}  <br><i>{{education[1].date}}</i></p>
                    </div>
                </div> 
                <div class="col">
                    <div class="resume-title font-medium" align="right">
                        <h3 class="font-medium">Don Brogdon</h3>
                        <p>{{email}}</p>
                        <p>{{location}} --- {{phone}}</p>
                        <router-link class="pdf-link" to="/rec">
                            <button class="btn btn-standard">Letters of Rec</button>
                        </router-link>
                        <a class="pdf-link" href="http://www.donbrogdon.com/assets/CV.pdf" target="_blank">
                            <button class="btn btn-standard">View PDF</button>
                        </a>
                    </div>
                </div>
                
            </div>
             
            <hr/>
            <div class="row no-gutter">
                <div class="col">
                    <div class="resume-projects font-medium">
                        <h2 class="font-medium">Projects</h2>
                        <h6>{{project[4].title}}</h6>
                        <p><i>{{project[4].role}}</i></p>
                        <p>{{project[4].details}}</p>
                        <br>
                        <h6>{{project[1].title}}</h6>
                        <p><i>{{project[1].role}}</i></p>
                        <p>{{project[1].details}}</p>
                        <br>
                        <h6>{{project[2].title}}</h6>
                        <p><i>{{project[2].role}}</i></p>
                        <p>{{project[2].details}}</p>
                        <br>
                    </div>
                </div>
                <div class="col">
                    <div class="resume-experience font-medium">
                        <h2 class="font-medium">Experience</h2>
                        <h6>{{workexp[0].company}}</h6>
                        <p><i>{{workexp[0].title}}</i></p>
                        <p>{{workexp[0].from}} - {{workexp[0].to}}</p>
                        <p>{{workexp[0].details}}</p>
                        <br>
                        <h6>{{workexp[1].company}}</h6>
                        <p><i>{{workexp[1].title}}</i></p>
                        <p>{{workexp[1].from}} - {{workexp[1].to}}</p>
                        <p>{{workexp[1].details}}</p>
                        <br>
                        <h6>{{workexp[2].company}}</h6>
                        <p><i>{{workexp[2].title}}</i></p>
                        <p>{{workexp[2].from}} - {{workexp[2].to}}</p>
                        <p>{{workexp[2].details}}</p>
                        <br>
                        <h6>{{workexp[3].company}}</h6>
                        <p><i>{{workexp[3].title}}</i></p>
                        <p>{{workexp[3].from}} - {{workexp[2].to}}</p>
                        <p>{{workexp[3].details}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Resume',
    props: {
        location: {
            type: String
        },
        phone: {
            type: String
        },
        email: {
            type: String
        },
        languages: {
            type: Array
        },
        technologies: {
            type: Array
        },
        other: {
            type: Array
        },
        project: {
            type: Array
        },
        workexp: {
            type: Array
        },
        education: {
            type: Array
        },
    },
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

    .resume-title {
        font-size: 24px;
        margin-right: 24px;
       p {
           margin-top: -10px;
       }

       .pdf-link {
           margin-left: 10px;
       }
    }
    .resume-education {
        margin-left: 24px;
        h2 {
            color: map-get($colors, secondary);
        }
        h6 {
            margin-bottom: 20px;
        }
        p {
            margin-top: -16px;
        }
    }

    .resume-projects {
        margin-left: 24px;
        h2 {
            color: map-get($colors, secondary);
        }
        h6 {
            margin-bottom: 20px;
        }
        p {
            margin-top: -16px;
        }
    }

    .resume-experience {
        margin-right: 24px;
        h2 {
            color: map-get($colors, secondary);
        }
        h6 {
            margin-bottom: 20px;
        }
        p {
            margin-top: -16px;
        }
    }

</style>
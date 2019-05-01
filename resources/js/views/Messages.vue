<template>
    <div class="fadeContent fadeIn">
        <div class="row simpleRow" id="accMess">
            <div class="col-lg-6 section">
                <h1>Marriage Advice</h1>
                <br>
                <h6>Have a helpful piece of wisdom?</h6>
                <br>
                <i class="far fa-heart sectionIcon"></i>
                <br><br>
                <i class="far fa-plus-square" data-toggle="collapse" data-target="#addAdvice"></i><i data-toggle="collapse" data-target="#advices" class="far fa-caret-square-down"></i>
            </div>
            <div class="collapse col-12 order-lg-12 bio" id="advices" data-parent="#accMess">
                <div class="bioInner flexArea">
                    <div class="listBubble" v-for="message in orderedMessages" v-bind:key="message.id">{{ message.message }}
                        <div class="fromNote">{{ message.from }}</div>
                    </div>
                    <div v-if="messages.length == 0" class="listBubble">
                        There are 0 messages.<br>Be the first to leave one.
                    </div>
                </div>
            </div>
            <div class="collapse col-12 order-lg-12 bio" id="addAdvice" data-parent="#accMess">
                <div class="bioInner">
                    <h5>Add Advice</h5><br>
                    <label>Message:<br>
                        <textarea v-model="message.message"></textarea><br> 
                    </label>
                    <label>Your Name:<br>
                        <input type="text" v-model="message.from"><br>
                    </label><br>
                    <button v-on:click="addAdvice">SUBMIT</button>
                    <br>
                    
                </div>
            </div>
            <div class="col-lg-6 section">
                <h1>Song Suggestions</h1>
                <br>
                <h6>What will get you on the dance floor?</h6>
                <br>
                <i class="fas fa-compact-disc sectionIcon"></i>
                <br><br>
                <i class="far fa-plus-square" data-toggle="collapse" data-target="#addSong"></i><i data-toggle="collapse" data-target="#songs" class="far fa-caret-square-down"></i>
            </div>
            <div class="collapse col-12 order-lg-12 bio" id="songs" data-parent="#accMess">
                <div class="bioInner flexArea">
                    <div class="listBubble" v-for="song in orderedSongs" v-bind:key="song.id">{{ song.song }}<br>by {{ song.artist }}
                        <div class="fromNote">{{ song.from }}</div>
                    </div>
                    <div v-if="songs.length == 0" class="listBubble">
                        There are 0 songs.<br>Be the first to suggest one.
                    </div>
                </div>
            </div>
            <div class="collapse col-12 order-lg-12 bio" id="addSong" data-parent="#accMess">
                <div class="bioInner">
                    <h5>Add Song</h5><br>
                    <label>Song:<br>
                        <input type="text" v-model="song.song"><br> 
                    </label>
                    <label>Artist:<br>
                        <input type="text" v-model="song.artist"><br> 
                    </label>
                    <label>Your Name:<br>
                        <input type="text" v-model="song.from"><br>
                    </label><br>
                    <button v-on:click="addSong">SUBMIT</button>
                    <br>
                </div>
            </div>
        </div>
        <br><br>
        
    </div>
</template>

<script>
export default {
    data() {
        return {
            messages: [],
            message: {
                id: '',
                message: '',
                from: ''
            }, 
            message_id: '',
            songs:[],
            song: {
                id: '',
                song: '',
                artist: '',
                from: ''
            },
            song_id: '' 
        }
    },

    created() {
        this.fetchMessages();
        this.fetchSongs();
    }, 
    computed: {
        orderedMessages: function () {
            return _.orderBy(this.messages, 'id', 'desc')
        },
        orderedSongs: function () {
            return _.orderBy(this.songs, 'id', 'desc')
        }
    },

    methods: {
        fetchMessages() {
            fetch('api/messages')
                .then(res => res.json())
                .then(res => {
                    this.messages = res;
                    console.log('messages', res);
                })
        },
        fetchSongs() {
            fetch('api/songs')
                .then(res => res.json())
                .then(res => {
                    this.songs = res;
                    console.log(res);
                    console.log('this is a test');
                })
        },
        addAdvice() {
            fetch('api/message', {
                method: 'post',
                body: JSON.stringify(this.message),
                headers: {
                    'content-type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                this.message.message = '';
                this.message.from = '';
                this.fetchMessages();
                $('#advices').collapse('show');
                $('#addAdvice').collapse('hide');
            })

        },
        addSong() {
            fetch('api/song', {
                method: 'post',
                body: JSON.stringify(this.song),
                headers: {
                    'content-type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                this.song.song = '';
                this.song.artist = '';
                this.song.from = '';
                this.fetchSongs();
                $('#songs').collapse('show');
                $('#addSong').collapse('hide');
            })

        }
    }

}
</script>

<style scoped>
    .section {
        padding-top: 2.5rem;
        padding-bottom: 2rem;
    }

    .bioInner {
        padding: 2em;
        text-align: left;
    }

    .sectionIcon {
        color: black;
        font-size: 5em;
    }

    img {
        width: 60px; 
    }

    i {
        font-size: 1.8rem;
        color: #0051ba;
        padding: .5rem 1.5rem;
    }

    p {
        margin-bottom: 1.6em;
    }

    

    .flexArea {
        display: flex;
        flex-flow: row wrap; /* Shorthand – you could use ‘flex-direction: column’ and ‘flex-wrap: wrap’ instead */
        justify-content: flex-start;
        align-items: flex-start;
    }

    

    @media (min-width: 992px) { 
        .section {
            border-left: 1px solid #CCCCCC;
            padding-bottom: 2.5rem;
        }

        p {
            text-align: left;
        }
    }
   

</style>
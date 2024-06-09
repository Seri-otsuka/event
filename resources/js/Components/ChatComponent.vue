<template>
    <div>
        <div v-for="message in messages" :key="message.id">
            {{ message.user.name }}: {{ message.message }}
        </div>
        <input v-model="newMessage" @keyup.enter="sendMessage">
    </div>
</template>

<script>
export default {
    data() {
        return {
            messages: [],
            newMessage: ''
        };
    },
    mounted() {
        this.fetchMessages();
        window.Echo.channel('chat')
            .listen('MessageSent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.message.user
                });
            });
    },
    methods: {
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },
        sendMessage() {
            axios.post('/messages', { message: this.newMessage }).then(response => {
                this.newMessage = '';
            });
        }
    }
};
</script>

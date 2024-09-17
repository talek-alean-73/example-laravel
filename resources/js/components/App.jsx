import React, { Component } from 'react';


class App extends Component{
    constructor(props) {
        super(props);
        this.state = {

        }
    }
    componentDidMount() {
        const username = window.prompt('Username: ', 'Anonymous');
        this.setState({ username });
        const pusher = new Pusher('APP_KEY', {
            cluster: 'APP_CLUSTER',
            encrypted: true
        });
        const channel = pusher.subscribe('chat');
        channel.bind('message', data => {
            this.setState({ chats: [...this.state.chats, data], test: '' });
        });
        this.handleTextChange = this.handleTextChange.bind(this);
    }

    handleTextChange(e) {
        if (e.keyCode === 13) {
          const payload = {
            username: this.state.username,
            message: this.state.text
          };
          axios.post('http://localhost:5000/message', payload);
        } else {
          this.setState({ text: e.target.value });
        }
    }

    render() {
        console.log('привет')
        return (
          <div>
            890888888--------999999999999999

          </div>
        );
    }
}

export default App;

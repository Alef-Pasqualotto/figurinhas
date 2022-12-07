import React from 'react';
import Main from './components/Main';
import albumItems from './data/album';
import socialLinks from './data/socialLinks';
import './App.css';

export default class Example extends React.Component {
    constructor(props) {
        super(props);

        this.toggleNavbar = this.toggleNavbar.bind(this);
        this.state = {
            collapsed: true,
            socialLinks: socialLinks,
            album: albumItems
        };
    }

    toggleNavbar() {
        this.setState({
            collapsed: !this.state.collapsed
        });
    }
    render() {
        return (
            <div>
                <Main album={this.state.album} />
            </div>
        );
    }
}
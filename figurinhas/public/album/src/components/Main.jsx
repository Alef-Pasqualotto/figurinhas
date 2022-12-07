import React from 'react';
import Album from './Album';
import App from '../App';

const Main = ({ album }) => {
    return (
        <main role="main">
            <Album album={album} />
            <div className="App">
                <App />
            </div>
        </main>
    );
};

export default Main;

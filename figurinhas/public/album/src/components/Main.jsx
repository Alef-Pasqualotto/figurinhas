import React from 'react';
import Album from './Album';
import App from '../App';

const Main = ({ album }) => {
    return (
        <main role="main">
            <Album album={album} />
        </main>
    );
};

export default Main;

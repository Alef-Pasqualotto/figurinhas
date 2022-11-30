import React from 'react';
import Album from './Album';

const Main = ({ album }) => {
    return (
        <main role="main">
            <Album album={album} />
        </main>
    );
};

export default Main;

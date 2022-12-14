import React from "react";
import { useDrop } from "react-dnd";
import { TYPES } from "./types";

export const Local = ({ local, setAlbum, colaFigurinha }) => {

  const [{backgroundColor}, dropRef] = useDrop(() => ({
    accept: TYPES.FIGURINHA,
    drop: (item) => {
      colaFigurinha(item.id)
      setAlbum(album => album.map(
          p => p.pos === item.pos ? {...p, f:item}:p
      ))
    },
    canDrop: (item) => !local.f && item.pos === local.pos,
    collect: (monitor) => ({
      backgroundColor: monitor.isOver() ?'black':'white'
    })
  }), [local.f])

  return (
    <div ref={dropRef} style={{
      backgroundColor, 
      border: "solid 1px black", width: "140px", height: "180px", margin: "2rem" }}>
      {local.f?.name}
    </div>
  );
};

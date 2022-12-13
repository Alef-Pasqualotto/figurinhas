import React from 'react';
import {
    Button,
    ButtonGroup,
    Card,
    CardImg,
    CardText,
    CardBody,
    Col,
    Container,
    Row
} from 'reactstrap';
import App from '../App';

const Album = ({ album }) => {
    return (
        <div className="album py-5 bg-light">
            <App/>
            <Container mt="3">
                <Row>
                    {album.map((item, key) => {
                        return (
                            <Col md="2" key={key}>
                                <Card className="mb-5 box-shadow" style={{width: "140px", height: "180px"}}>
                                    <CardImg
                                        src={item.src}
                                        alt={item.altText}
                                    />
                                    <CardBody className='fundo'>
                                        <CardText>{item.description}</CardText>
                                        <div className="d-flex justify-content-between align-items-center">
                                            <small className="text-muted">
                                                {item.time}
                                            </small>
                                        </div>
                                    </CardBody>
                                </Card>
                            </Col>
                        );
                    })}
                </Row>
            </Container>
        </div>
    );
};

export default Album;

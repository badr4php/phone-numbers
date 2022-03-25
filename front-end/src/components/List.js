import React from 'react';
import {Row,Table} from 'react-bootstrap';

const renderData = (data) => {
  return data.map(item => {
    return <tr>
      <td>{item.country}</td>
      <td>{item.state}</td>
      <td>{item.code}</td>
      <td>{item.phone}</td>
    </tr>
  })
}

const List = ({data}) => (
    <Row style={{marginTop:"5%"}}>
        <Table striped bordered hover>
        <thead>
            <tr>
            <th>Country</th>
            <th>State</th>
            <th>Country Code</th>
            <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            {renderData(data)}
        </tbody>
        </Table>
    </Row>
);


export default List;

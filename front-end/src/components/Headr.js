import React from 'react';
import {Row, Col, Form} from 'react-bootstrap';
import {countries} from "./../config/constants";

const renderCountries = () => {
    return countries.map(item => {
        return <option value={item.code}>{item.name}</option>
    })
}
const Headr = ({onCountryChange, onStateChange}) => (
    <Row>
        <Col>
            <Form.Select aria-label="Default select example" onChange={onCountryChange} id="country">
                <option value=''>Country</option>
                {renderCountries()}
            </Form.Select>
        </Col>
        <Col>
            <Form.Select aria-label="Default select example" onChange={onStateChange} id="state">
            <option value=''>State</option>
            <option value="OK">OK</option>
            <option value="NOK">NOK</option>
            </Form.Select>
        </Col>
  </Row>
);

export default Headr;

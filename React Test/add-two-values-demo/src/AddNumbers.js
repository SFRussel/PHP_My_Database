import React, { Component } from 'react';
class AddNumbers extends Component {
    constructor(props) {
        super(props);
        this.state = {
            num1: '',
            num2: '',
            result: '',
        };
    }
    handleNum1Change = (event) => {
        this.setState({
            num1: event.target.value,
        });
    };
    handleNum2Change = (event) => {
        this.setState({
            num2: event.target.value,
        });
    };
    handleAdd = () => {
        const { num1, num2 } = this.state;
        const sum = parseFloat(num1) + parseFloat(num2);
        this.setState({
            result: sum,
        });

    };
    render() {
        return (
            <div>
            <h2>Add Two Numbers</h2>
            <input
            type="number"
            placeholder="Enter number 1"
            value={this.state.num1}
            onChange={this.handleNum1Change}
            />
            <input
            type="number"
            placeholder="Enter number 2"
            value={this.state.num2}
            onChange={this.handleNum2Change}
            />
            <button onClick={this.handleAdd}>Add</button>
            <h1>Result: {this.state.result}</h1>
            </div>
        );
    }
}
export default AddNumbers;
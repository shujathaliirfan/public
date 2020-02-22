import React,{Component} from 'react';
import Shujath from "./Person/person"

import './App.css';

class App extends Component {

  state ={
    Persons:[
      {name:"shujath", age:"22"},
      {name:"alih", age:"28"},
      {name:"irfan", age:"29"}



    ]
  }

myFunction = () =>{
  this.setState({
    Persons:[
      {name:"kamran", age:"266"},
      {name:"fiaz", age:"666"},
      {name:"muzammil", age:"88"}
    ]

  })
}
render(){

  return (

  <div className="App">
    <h1>iam  React a developer</h1>

    <button onClick={this.myFunction}>click me</button>

    <Shujath name={this.state.Persons[0].name} age={this.state.Persons[0].age} />
    <Shujath name={this.state.Persons[1].name} age={this.state.Persons[1].age} />
    <Shujath name={this.state.Persons[2].name} age={this.state.Persons[2].age} />






  </div>  )}
}

export default App;

import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  standalone: true,
  template: `
    <div class="wrapper">
      <div class="card">
        <h1>Angular is Live!</h1>
        <p>This Angular application is running inside a Docker container, served by Nginx.</p>
        <p class="counter">Clicks: {{ clickCount }}</p>
        <button (click)="increment()">Click me</button>
      </div>
    </div>
  `,
  styles: [`
    .wrapper {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #dd0031, #c3002f);
    }
    .card {
      background: white;
      padding: 40px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    h1 { color: #dd0031; }
    .counter { font-size: 20px; font-weight: bold; margin: 15px 0; }
    button {
      background: #dd0031;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }
    button:hover { background: #a3002a; }
  `]
})
export class AppComponent {
  clickCount = 0;

  increment() {
    this.clickCount++;
  }
}


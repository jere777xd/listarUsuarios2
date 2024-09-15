import { Component, OnInit } from '@angular/core';
import { Usuario } from '../models/usuario';
import { ApiService } from '../services/api.service';


@Component({
  selector: 'app-usuarios',
  templateUrl: './usuarios.component.html',
  styleUrls: ['./usuarios.component.css']
})
export class UsuariosComponent implements OnInit{

  usuarios: Usuario[] = []

  constructor(public apiService:ApiService) {}

  ngOnInit(): void {
    this.getUsuarios();
  }

  getUsuarios():void{
    this.apiService.getUsuarios().subscribe(response => {
    const { usuarios } = response
    this.usuarios = usuarios;
    });
  }
}

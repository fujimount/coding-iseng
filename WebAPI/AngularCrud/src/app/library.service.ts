import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Library } from './library';
import 'rxjs/add/operator/map';

@Injectable({
  providedIn: 'root'
})
export class LibraryService {
  [x: string]: any;
  url = 'https://localhost:44317/Api/BooksDetails'
  constructor(private http:HttpClient) {} 
    getAllLibrary() : Observable<Library[]>
    {
      return this.http.get<Library[]> (this.url + '/AllLibraryDetails');
    }
    getBooksbyKode(Kode_Buku:string) : Observable<Library>
    {
      return this.http.get<Library>(this.url + '/GetBooksbyKode/' + Kode_Buku);
    }
    insertBook(books : Library) : Observable<Library>
    {
      const httpOptions = {headers : new HttpHeaders({'Content-Type' : 'application/json'})};
      return this.http.post<Library>(this.url + '/InsertBooktoDatabase/', books, httpOptions);
    }
    updateBooks(books : Library) :Observable<Library>
    {
      const httpOptions = {headers: new HttpHeaders({'content-type' : 'application/json'})};
      return this.http.put<Library>(this.url + 'UpdateBooks', books, httpOptions);
    }
    deleteBooks(Kode_Buku : string) : Observable<Number>
    {
      const httpOptions = {headers: new HttpHeaders({'content-type' : 'application/json'})};
      return this.http.delete<number>(this.url + '/DeleteBooks?id=' + Kode_Buku, httpOptions)
    }
  }

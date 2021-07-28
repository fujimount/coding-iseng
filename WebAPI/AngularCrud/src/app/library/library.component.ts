import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { Observable } from 'rxjs';
import { LibraryService } from '../library.service';
import { Library } from '../library';

@Component({
  selector: 'app-library',
  templateUrl: './library.component.html',
  styleUrls: ['./library.component.css']
})
export class LibraryComponent implements OnInit {
  dataSaved = false;
  libraryForm : any;
  allLibraries! : Observable<Library[]>;
  libraryIdUpdate = "";
  massage = "";

  constructor( private formbuilder : FormBuilder, private libraryService : LibraryService) { }

  ngOnInit(){
    this.libraryForm = this.formbuilder.group({
        Kode_Buku:['',[Validators.required]],
        Judul_Buku:['',[Validators.required]],
        Pengarang:['',[Validators.required]],
        Jumlah_Buku:['',[Validators.required]]
    });
    this.loadAllLibraries();
    }
    loadAllLibraries(){
      this.allLibraries = this.libraryService.getAllLibrary();
    }

    onFormSubmit(){
      this.dataSaved = false;
      const library2 = this.libraryForm.value;
      this.insertBook(library2);
      this.libraryForm.reset();
    }
    insertBook(library2: any) {
    throw new Error('Method not implemented.');
    }
    loadLibrarytoedit(Kode_Buku: string){
      this.libraryService.getBooksbyKode(Kode_Buku).subscribe(library2 =>{
        this.massage = "";
        this.dataSaved = false;
        this.libraryIdUpdate = library2.Kode_Buku;
        this.libraryService.controls['Kode_Buku'].setValue(library2.Kode_Buku);
        this.libraryService.controls['Judul_Buku'].setValue(library2.Judul_Buku);
        this.libraryService.controls['Pengarang'].setValue(library2.Pengarang);
        this.libraryService.controls['Jumlah_Buku'].setValue(library2.Jumlah_Buku);
    });
    }
    InsertBook(library: Library){
      if (this.libraryIdUpdate == null){
        this.libraryService.insertBook(library).subscribe(() =>{
          this.dataSaved = true;
          this.massage = "Record Save Successfully";
          this.loadAllLibraries();
          this.libraryIdUpdate = "";
          this.libraryForm.reset();

        }
        );
      }else{
        library.Kode_Buku = this.libraryIdUpdate;
        this.libraryService.updateBooks(library).subscribe(() => {
            this.dataSaved = true;
            this.massage ="Record Updated Successfully";
            this.loadAllLibraries();
            this.libraryIdUpdate = "";
            this.libraryForm.reset();
        });
      }
    }
    deleteBooks(kode: string){
      if (confirm ("Are you sure want to delete this?")){
        this.libraryService.deleteBooks(kode).subscribe(() =>{
          this.dataSaved = true;
          this.massage = "Record Deleted Successfully";
          this.loadAllLibraries();
          this.libraryIdUpdate = "";
          this.libraryForm.reset();
        }
        );
      }
    }
    resetForm(){
      this.libraryForm.reset();
      this.massage = "";
      this.dataSaved = false;
    }
}


